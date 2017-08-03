<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <div id="app">
    @{{ message }}
    </div>  
    </body>
</html>

<script type="text/javascript" src="{{ asset('js/vue.min.js') }}"></script>


<script>    
    new Vue({
        el: '#app',
        data: {
        message: 'Hello Vue.js!'
        }
    });
</script>