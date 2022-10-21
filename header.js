// ==================== Sidebar==============
let menu=document.querySelector('#menu');
let sidebar=document.querySelector('.sidebar');
let close=document.querySelector('#close');

menu.addEventListener('click', function(e){
sidebar.classList.add('active');
});
close.addEventListener('click', function(e){
sidebar.classList.remove('active');
});

let arrow=document.querySelector('.arrow');
let profilepopup=document.querySelector('.profile-popup');

arrow.addEventListener('click', function(e){
  arrow.classList.toggle('active');
  profilepopup.classList.toggle('active');
});