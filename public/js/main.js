$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

$('#search').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
        type : 'get',
        url : 'api/search',
        data: 'json',
        success:function(data){
            
            for (let x = 0; x < data.length; x++) {
                $('.d').html(data[x].name);
            }
            
        }
        });
    })