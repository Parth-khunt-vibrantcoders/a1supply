$(document).ready(function() {
    // new WOW().init();
    AOS.init();

    // Mobile menu
    $('header .toggleBtn').click(function(){
        $('body').toggleClass('menuOpen');
    });

    // Submenu js
    $('li.dropdown > a').on('click',function(event){
    
        event.preventDefault();
        $(this).toggleClass('selected');
        $(this).parent().find('ul').first().toggle(300);
        
        $(this).parent().siblings().find('ul').hide(200);

        $(this).parent().find('ul').parent().mouseleave(function(){ 
            var thisUI = $(this);
            $('html').click(function(){
                thisUI.children(".dropdown-menu").hide();
                thisUI.children("a").removeClass('selected');
                     
                $('html').unbind('click');
            });
        });
    });

    // Accoridion js
    $('.accordion_header').click(function(e) {
        e.preventDefault();
    
        let $this = $(this);
        
        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.parent("li").removeClass('active');
            $this.next().slideUp(350);
        } else {
            $this.parent().parent().find('li .accordion_content').removeClass('show');
            $this.parent().parent().find('li .accordion_content').slideUp(350);
            $this.parent('li').siblings('li.active').removeClass('active');
            $this.next().toggleClass('show');
            $this.parent("li").toggleClass('active');
            $this.next().slideToggle(350);
        }
    });
      
})