const d=document;

let componente=d.querySelectorAll('.componente');
componente.forEach((el)=>{
    el.setAttribute('style','transition:0.6 ease');
    el.addEventListener('mouseenter',()=>{
        el.setAttribute('style','transform:scale(1.05)');
        let active=el.querySelectorAll('.element');
        active.forEach((ele)=>{
            ele.classList.remove('active');
            ele.classList.add('letra_active');
        });
    })
    el.addEventListener('mouseleave',()=>{
        el.removeAttribute('style','transform:scale(1,1)');
        let active=el.querySelectorAll('.element');
        active.forEach((ele)=>{
            ele.classList.add('active');    
            ele.classList.remove('letra_active');
        });
    })
});


/*
// CUANDO EL MOUSE PARA POR UN ELEMENTO
parent.addEventListener('mouseenter', function() {
		parent.style.background = 'blue';
}
// Cuando el mouse salio del elemento
parent.addEventListener('mouseleave', function() {
		parent.style.background = '#00f5f5';
		console.log('El ratón está afuera del elemento');
	});
*/ 