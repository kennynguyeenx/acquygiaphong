<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
    private $num_rows = 20;

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('admin/Brands_model');
    }

    public function index($page = 0)
    {
        $head = $this->loadHeader($this->Public_model->getSeo('home'));
        $data = $this->loadGeneralData();
        $data['countQuantities'] = $this->Public_model->getCountQuantities();
        $data['bestSellers'] = $this->Public_model->getbestSellers();
        $data['sliderProducts'] = $this->Public_model->getSliderProducts();
        $data['lastBlogs'] = $this->Public_model->getLastBlogs();
        $data['products'] = $this->Public_model->getProducts($this->num_rows, $page, $_GET);
        $rowscount = $this->Public_model->productsCount($_GET);
        $data['atlas'] = $this->Public_model->getAtlas();
        $data['bosch'] = $this->Public_model->getBosch();
        $data['gs'] = $this->Public_model->getGS();
        $data['varta'] = $this->Public_model->getVarta();
        $data['links_pagination'] = pagination('home', $rowscount, $this->num_rows);

        $this->render('home', $head, $data);
    }

    public function productsByCategory($categoryId, $page = 0)
    {
        $head = $this->loadHeader($this->Public_model->getSeo('home'));
        $data = $this->loadGeneralData();
        $category = $this->Public_model->getCategoryById($categoryId);
        $subCategoryIdArray = $this->Public_model->getSubCategoryIdArrayForCategory($categoryId);
        $categoryIdArray = array_merge($subCategoryIdArray, [$categoryId]);
        $data['products'] = $this->Public_model->getProductsByCategory($categoryIdArray);
        $data['category'] = $category;
        if (!empty($category) && !empty($category['sub_for'])) {
            $parentCategory = $this->Public_model->getCategoryById($category['sub_for']);
            $data['parentCategory'] = $parentCategory;
        }
        $rowscount = $this->Public_model->productsCount($_GET);
        $data['links_pagination'] = pagination('home', $rowscount, $this->num_rows);

        $this->render('productsByCategory', $head, $data);
    }

    /**
     *
     */
    protected function loadGeneralData()
    {
        $data = array();
        $allCategories = $this->Public_model->getShopCategories();
        $data['home_categories'] = $this->getHomeCategories($allCategories);
        $data['all_categories'] = $allCategories;
        $data['newProducts'] = $this->Public_model->getNewProducts();
        $data['showBrands'] = $this->Home_admin_model->getValueStore('showBrands');
        $data['brands'] = $this->Brands_model->getBrands();
        $data['showOutOfStock'] = $this->Home_admin_model->getValueStore('outOfStock');
        $data['shippingOrder'] = $this->Home_admin_model->getValueStore('shippingOrder');
        return $data;
    }

    /**
     * @param $arrSeo
     * @return array
     */
    protected function loadHeader($arrSeo)
    {
        $head = array();
        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);

        return $head;
    }

    /*
     * shop page
     */

    public function shop($page = 0)
    {
        $head = $this->loadHeader($this->Public_model->getSeo('shop'));
        $data = $this->loadGeneralData();
        $data['products'] = $this->Public_model->getProducts($this->num_rows, $page, $_GET);
        $rowscount = $this->Public_model->productsCount($_GET);
        $data['links_pagination'] = pagination('home', $rowscount, $this->num_rows);
        $this->render('shop', $head, $data);
    }

    private function getHomeCategories($categories)
    {

        /*
         * Tree Builder for categories menu
         */

        function buildTree(array $elements, $parentId = 0)
        {
            $branch = array();
            foreach ($elements as $element) {
                if ($element['sub_for'] == $parentId) {
                    $children = buildTree($elements, $element['id']);
                    if ($children) {
                        $element['children'] = $children;
                    }
                    $branch[] = $element;
                }
            }
            return $branch;
        }

        return buildTree($categories);
    }

    /*
     * Called to add/remove quantity from cart
     * If is ajax request send POST'S to class ShoppingCart
     */

    public function manageShoppingCart()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        $this->shoppingcart->manageShoppingCart();
    }

    /*
     * Called to remove product from cart
     * If is ajax request and send $_GET variable to the class
     */

    public function removeFromCart()
    {
        $backTo = $_GET['back-to'];
        $this->shoppingcart->removeFromCart();
        $this->session->set_flashdata('deleted', lang('deleted_product_from_cart'));
        redirect(LANG_URL . '/' . $backTo);
    }

    public function clearShoppingCart()
    {
        $this->shoppingcart->clearShoppingCart();
    }

    public function viewProduct($id)
    {
        $data = array();
        $head = array();
        $data['product'] = $this->Public_model->getOneProduct($id);
        $data['sameCagegoryProducts'] = $this->Public_model->sameCagegoryProducts($data['product']['shop_categorie'], $id);
        if ($data['product'] === null) {
            show_404();
        }
        $vars['publicDateAdded'] = $this->Home_admin_model->getValueStore('publicDateAdded');
        $this->load->vars($vars);
        $head['title'] = $data['product']['title'];
        $description = url_title(character_limiter(strip_tags($data['product']['description']), 130));
        $description = str_replace("-", " ", $description) . '..';
        $head['description'] = $description;
        $head['keywords'] = str_replace(" ", ",", $data['product']['title']);
        $head['image'] = null;
        if(isset($data['product']['image'])) {
            $head['image'] = base_url('/attachments/shop_images/' . $data['product']['image']);
        }
        $this->render('view_product', $head, $data);
    }

    public function confirmLink($md5)
    {
        if (preg_match('/^[a-f0-9]{32}$/', $md5)) {
            $result = $this->Public_model->confirmOrder($md5);
            if ($result === true) {
                $data = array();
                $head = array();
                $head['title'] = '';
                $head['description'] = '';
                $head['keywords'] = '';
                $this->render('confirmed', $head, $data);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }

    public function discountCodeChecker()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        $result = $this->Public_model->getValidDiscountCode($_POST['enteredCode']);
        if ($result == null) {
            echo 0;
        } else {
            echo json_encode($result);
        }
    }

    public function sitemap()
    {
        header("Content-Type:text/xml");
        echo '<?xml version="1.0" encoding="UTF-8"?>
                <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $products = $this->Public_model->sitemap();
        $blogPosts = $this->Public_model->sitemapBlog();

        foreach ($blogPosts->result() as $row1) {
            echo '<url>

      <loc>' . base_url('blog/' . $row1->url) . '</loc>

      <changefreq>monthly</changefreq>

      <priority>0.1</priority>

   </url>';
        }

        foreach ($products->result() as $row) {
            echo '<url>

      <loc>' . base_url($row->url) . '</loc>

      <changefreq>monthly</changefreq>

      <priority>0.1</priority>

   </url>';
        }

        echo '</urlset>';
    }

}
