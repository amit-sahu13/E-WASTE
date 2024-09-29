function addingItems(){
    let hide = document.getElementById('responsive-navlist');
    let menuicon = document.getElementById('menu1').style.display='none';
    let menuiconcross = document.getElementById('close').style.display='block';
    if(hide.style.display='none')
    {
        hide.style.display='block';
    }
}

function removingItems(){
    let hide = document.getElementById('responsive-navlist');
    let menuicon = document.getElementById('menu1').style.display='block';
    let menuiconcross = document.getElementById('close').style.display='none';
    if(hide.style.display='block')
    {
        hide.style.display='none';
    }
}

