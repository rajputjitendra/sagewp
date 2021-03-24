<?php 
require_once("../wp-load.php");
global $wpdb;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
global $post;

$args = array(
    'post_type'=> 'product',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => 1 
    );
$result = new WP_Query( $args );

$postId =  $result->posts[0]->ID;
if($postId){
    $_product = wc_get_product( $postId );
    $prodcut_arr = array(
        'Product_name' => $_product->get_title(),
        'Product_price' => $_product->get_price(),
    );

    $output = array('status' => 1, 'data' => $prodcut_arr);
}else{
    $prodcut_arr = array();
    $output = array('status' => 0, 'data' => $prodcut_arr);
}

echo json_encode( $output );

?>

<?php if(!empty($prodcut_arr)){ ?>
    <div style="width:100%;margin-top:15px;"  >
        <table border="1" cellspacing="2" cellpadding="10">
            <tbody>
                <tr>
                    <td>Prodcut Name</td>
                    <td><?php echo $prodcut_arr['Product_name']; ?></td>
                </tr>
                <tr>
                    <td>Prodcut Price</td>
                    <td><?php echo $prodcut_arr['Product_price']; ?></td>
                </tr>
            </tbody>

        </table>
        
    </div> 

<?php  } ?>




