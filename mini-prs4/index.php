<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Get Selected Option Value</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
// $(document).ready(function(){
//     $(".country").change(function(){
//         var selectedCountry = $(this).children("option:selected").val();
//         console.log(selectedCountry);
//         // alert("You have selected the country - " + selectedCountry);
//     });
// });

$(document).on('change', '.country', function(){
    var selectedCountry = $(this).children("option:selected").val();
    var a = 'time.php';
    // console.log(selectedCountry);
   

    if (selectedCountry === 'usa') {
        $.ajax({
        type : 'post',
        url : a,
        data : {
            // '_token' : token,
            'selectedCountry' : selectedCountry,
        },
        // headers: {
        //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        // },
        success: function (result){
            // alert('ok');
            var html = '<p>usa</p>';
            alert(html);
            // alert('usa');
        }
    })
    }

    if (selectedCountry === 'uk') {
        $.ajax({
        type : 'post',
        url : a,
        data : {
            // '_token' : token,
            'selectedCountry' : selectedCountry,
        },
        // headers: {
        //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        // },
        success: function (result){
            var html = '<p>uk</p>';
            alert(html);
        }
    })
    }

    if (selectedCountry === 'india') {
        $.ajax({
        type : 'post',
        url : a,
        data : {
            // '_token' : token,
            'selectedCountry' : selectedCountry,
        },
        // headers: {
        //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        // },
        success: function (result){
            var html = '<p>india</p>';
            alert(html);
        }
    })
    }
})
</script>
</head> 
<body>
    <form>
        <label>Select Country:</label>
        <select class="country">
            <option value="usa">United States</option>
            <option value="india">India</option>
            <option value="uk">United Kingdom</option>
        </select>
    </form>
</body>
</html>
