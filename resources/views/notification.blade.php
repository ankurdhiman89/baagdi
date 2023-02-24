<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>  
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">  
<script>  
  @if(Session::has('success'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true,
     "positionClass": "toast-bottom-center",
  }
      toastr.success("{{ Session::get('success') }}");
  @endif
  @if($errors->has('file'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true,
     "positionClass": "toast-bottom-center",
  }
      toastr.error("{{ $errors->first('file') }}");
  @endif
</script>  
<style type="text/css"> #toast-container.toast-bottom-center > div {
   opacity: 1;
}
</style>