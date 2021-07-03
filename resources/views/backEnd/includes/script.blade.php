<!-- Add Button option -->
<script type="text/javascript">
  $(document).ready(function(){
    var counter = 0;
    $(document).on("click",".addeventmore",function(){
      var whole_extra_item_add = $("#whole_extra_item_add").html();
      $(this).closest(".add_item").append(whole_extra_item_add);
      counter++;
    });
    $(document).on("click",".removeeventmore",function(event){
      $(this).closest(".delete_whole_extra_item_add").remove();
      counter -= 1
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#myForm').validate({
      rule: {
        "fee_category_id": {
          required:true,
        },
        "class_id[]": {
          required:true,
        },
        "amount[]": {
          required:true,
        }
      },
      messages: {
      },
      errorElement: 'span',
      errorPlacement: function(error, element){
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      }
      highlight: function(element, errorClass, validClass){
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass){
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>