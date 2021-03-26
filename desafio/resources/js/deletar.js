(function(win,doc){
    'use strict';

    function confirmDel(event)
    {
        event.preventDefault();
        console.log(event.target.parentNode.href)
    }
    if(doc.querySelector('.js-del')){
        let btn=doc.querySelectorAll('.js-del');
        for(let i=0; i<btn.length; i++){
            btn[i0.addEventListener('click', confirmDel,false)]
        }
    }
}) (window.document);