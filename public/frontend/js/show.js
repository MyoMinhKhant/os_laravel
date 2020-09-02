 $(document).ready(function(){
   show_cart();

     $(".product_table").on('click','.fa-minus-circle',function(){
    var id=$(this).data('id');
  /*  alert(id);*/
  var mycart=localStorage.getItem('mycart');
  var mycart_obj=JSON.parse(mycart);
  $.each(mycart_obj.product_list,function(i,v){
    if(v){
    if(v.id==id){

      if(v.quantity==1){
        var ans=confirm('Are You Sure to delete?');
        if(ans){
          mycart_obj.product_list.splice(i,1);
              }
      }else{
      v.quantity--;
    }
  }
}
  })
  localStorage.setItem('mycart',JSON.stringify(mycart_obj));
  show_cart();
  update_cart_count();

   })


     
   $(".product_table").on('click','.fa-plus-circle',function(){
    var id=$(this).data('id');
  /*  alert(id);*/
  var mycart=localStorage.getItem('mycart');
  var mycart_obj=JSON.parse(mycart);
  $.each(mycart_obj.product_list,function(i,v){
    if(v.id==id){
      v.quantity++;
    }
    

  })
  localStorage.setItem('mycart',JSON.stringify(mycart_obj));
  show_cart();
  update_cart_count();

   })


   update_cart_count();
  
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
      if(v.id=product.id){
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
        }else{
          $(".cart_item_count").html(0);
        }
      }else{
        $(".cart_item_count").html(0);
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