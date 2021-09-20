       $(document).ready(function(){
            $("img-fluid").hover(function(){
                var div = $("img-fluid");
                div.animate({height: '300px', opacity: '0.4'}, "slow");
                div.animate({width: '300px', opacity: '0.8'}, "slow");
                div.animate({height: '100px', opacity: '0.4'}, "slow");
                div.animate({width: '100px', opacity: '0.8'}, "slow");
            });
        });