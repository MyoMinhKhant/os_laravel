$(document).ready(function(){
    update_cart_count();
    $(".addtocartBtn").click(function(){
      /*console.log('hello');*/
      var id = $(this).data('id');
      var name=$(this).data('name');
      var price=$(this).data('price');
      var photo=$(this).data('photo');
   /*   console.log(id,product_name,product_price,product_photo)*/
   var product={
    id:id,
    name:name,
    price:price,
    photo:photo,
    quantity:1
   }
/*   console.log(product);*/

 //local storage
add_to_cart(product);
update_cart_count();
    })
    function add_to_cart(product){
      var mycart=localStorage.getItem('mycart');
     // to create mycart (json string)
      if(!mycart){
        mycart='{"product_list":[]}'
      }
      var mycart_obj=JSON.parse(mycart);
      console.log(mycart_obj);
     //push product into mycart_obj
     var has_id=false;
     $.each(mycart_obj.product_list,function(i,v){
      if(v.id==product.id){
        has_id=true;
        v.quantity+=1;
      }

     })
     if(!has_id){
     mycart_obj.product_list.push(product);
   }
     //convert mycart to json string and store in local stroage
     localStorage.setItem('mycart',JSON.stringify(mycart_obj));


    }

    function update_cart_count(){
      var mycart=localStorage.getItem('mycart');
      if(mycart){
        //json string to obj
        var mycart_obj=JSON.parse(mycart);
        // check product_list array
        if(mycart_obj.product_list.length){
          var total=0;
          $.each(mycart_obj.product_list,function(i,v){
         /*   console.log(i,v);*/
         total+=v.quantity;
          })
          $(".cart_item_count").html(total);
        }
      }

    }
   })


 $('.buy_now').on('click',function(){
  var notes=$('.notes').val();
  var shopString=localStorage.getItem("heinshop");
  if(shopString){
    $.post('/orders',{shop_data:shopString,notes:notes},function(response){
      if(response){
        alert(response);
        localStorage.clear();
        getData();
        location.href="/";
      }
    })
  }
 })
 