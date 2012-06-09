window.addEvent('domready',function() {
     new SmoothScroll({duration:250});
     var a = $('gantry-totop');
     var go = $('gototop');
     if(a){
         var b = new Fx.Scroll(window);
         a.setStyle('outline', 'none').addEvent('click', function (e) {
             new Event(e).stop();
             b.toTop()
         })
     }
     if(go){
     go.set('opacity','0').setStyle('display','block');
     }
     window.addEvent('scroll',function(e) {
     if(go){
if(Browser.Engine.trident4) {
go.setStyles({
'position': 'absolute',
'bottom': window.getPosition().y + 10,
'width': 100
});
}
go.fade((window.getScroll().y > 300) ? 'in' : 'out')
     }
     });
});