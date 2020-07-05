
   
onload = function(){
   

   let id_d = document.getElementById('diarium');
   let id_d_v = document.getElementsByClassName('version')[0];
   let id_d_p = id_d.getElementsByTagName('progress')[0];
   id_d_v.textContent=dia_ver + ' ' + dia_ver_num + ' готово на ' + diarium + '%';
   id_d_p.value=diarium;


   let id_p = document.getElementById('portrait');
   let id_p_v = document.getElementsByClassName('version')[1];

   id_p_v.textContent='Я уже нарисовал ' + portrait + ' слоёв';



   let id_pa = document.getElementById('promotion');
   let id_pa_v = document.getElementsByClassName('version')[2];

   id_pa_v.textContent='Я уже провел ' + promotion + ' акций';



   let id_ai = document.getElementById('agency');
   let id_ai_v = document.getElementsByClassName('version')[3];
   let id_ai_p = id_ai.getElementsByTagName('progress')[0];
   id_ai_v.textContent=agency_ver + ' ' + agency_ver_num + ' готово на ' + agency + '%';
   id_ai_p.value=agency;


   let id_is = document.getElementById('shop');
   let id_is_v = document.getElementsByClassName('version')[4];
   let id_is_p = id_is.getElementsByTagName('progress')[0];
   id_is_v.textContent=shop_ver + ' ' + shop_ver_num + ' готово на ' + shop + '%';
   id_is_p.value=shop;


   let id_eg = document.getElementById('game');
   let id_eg_v = document.getElementsByClassName('version')[5];
   let id_eg_p = id_eg.getElementsByTagName('progress')[0];
   id_eg_v.textContent=game_ver + ' ' + game_ver_num + ' готово на ' + game + '%';
   id_eg_p.value=game;


   let id_ss = document.getElementById('statistic');
   let id_ss_v = document.getElementsByClassName('version')[6];
   let id_ss_p = id_ss.getElementsByTagName('progress')[0];
   id_ss_v.textContent=statistic_ver + ' ' + statistic_ver_num + ' готово на ' + statistic + '%';
   id_ss_p.value=statistic;


   let id_sp = document.getElementById('social');
   let id_sp_v = document.getElementsByClassName('version')[7];
   let id_sp_p = id_sp.getElementsByTagName('progress')[0];
   id_sp_v.textContent=social_ver + ' ' + social_ver_num + ' готово на ' + social + '%';
   id_sp_p.value=social;


}
