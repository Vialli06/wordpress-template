
let videoList = document.querySelectorAll('.video-list-container .list');

videoList.forEach(vid =>{
   vid.onclick = () =>{
      videoList.forEach(remove =>{remove.classList.remove('active')});
      vid.classList.add('active');
      let src = vid.querySelector('.list-video').src;
      let title = vid.querySelector('.list-title').innerHTML;
      document.querySelector('.main-video-container .main-video').src = src;
      document.querySelector('.main-video-container .main-video').play();
      document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
   };
});

let month = document.querySelector('.price-toggler .month');
let year = document.querySelector('.price-toggler .year');
let monthAmount = document.querySelectorAll('.box-container .box .month');
let yearAmount = document.querySelectorAll('.box-container .box .year');

year.onclick = () =>{
    year.classList.add('active');
    month.classList.remove('active');

    monthAmount.forEach(mo =>{ mo.style.display = 'none' });
    yearAmount.forEach(yr =>{ yr.style.display = 'block' });
};

month.onclick = () =>{
    year.classList.remove('active');
    month.classList.add('active');

    monthAmount.forEach(mo =>{ mo.style.display = 'block' });
    yearAmount.forEach(yr =>{ yr.style.display = 'none' });
};

const swiper = new Swiper('.swiper', {
            
            autoplay: {
                delay: 3000,
                disableOnInteraction:false,
            },
            loop: true,
        
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
            },
        
            
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
        
            
        });