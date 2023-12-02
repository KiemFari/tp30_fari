const loi =document.getElementById("loi")
const prenom =document.getElementById("prenom");
const nom =document.getElementById("nom");
const email =document.getElementById("email");
const phoneNumber =document.getElementById("number");
const age =document.getElementById("age");
const country =document.getElementById("country");

const  bonde =document.getElementById("bonde");
 const  rajout =document.getElementById("rajout");
 const rajout1 =document.getElementById("rajout1");
 const  rajout2 =document.getElementById("rajout2");
 const  rajout3 =document.getElementById("rajout3");
 const rajout4 =document.getElementById("rajout4");
 const  rajout5 =document.getElementById("rajout5");
//  const  rajout6 =document.getElementById("rajout6");
//  const  rajout7 =document.getElementById("rajout7");

 

 bonde.addEventListener('click', function(e){
   if (!prenom.value) {
      rajout.innerHTML='remplir';
      rajout.style.color="red"
      prenom.style.background="red";
      e.preventDefault()
   }else{
      rajout.innerHTML=""
      prenom.style.background="green"
   }
   
 });
 bonde.addEventListener('click', function(e){
   if (!nom.value) {
      rajout1.innerHTML='remplir';
      rajout1.style.color="red"
      nom.style.background="red";
      e.preventDefault()
   }else{
      rajout1.innerHTML=""
      nom.style.background="green"
   }
   
 });
 bonde.addEventListener('click', function(e){
   if (!email.value) {
      rajout2.innerHTML='remplir';
      rajout2.style.color="red"
      email.style.background="red";
      e.preventDefault()
   }else{
      rajout2.innerHTML=""
      email.style.background="green"
   }
   
 });
 bonde.addEventListener('click', function(e){
   if (!phoneNumber.value) {
      rajout3.innerHTML='remplir';
      rajout3.style.color="red"
     phoneNumber.style.background="red";
      e.preventDefault()
   }else{
      rajout3.innerHTML=""
      .style.background="green"
   }
   
 });

 bonde.addEventListener('click', function(e){
   if (!age.value) {
      rajout4.innerHTML='remplir';
      rajout4.style.color="red"
      age.style.background="red";
      e.preventDefault()
   }else{
      rajout4.innerHTML=""
      age.style.background="green"
   }
   
 });
 bonde.addEventListener('click', function(e){
   if (!country.value) {
      rajout5.innerHTML='remplir';
      rajout5.style.color="red"
      country.style.background="red";
      e.preventDefault()
   }else{
      rajout5.innerHTML=""
      country.style.background="green"
   }
   
 });
 bonde.addEventListener('click', function(e){
   if (!age.value) {
      rajout4.innerHTML='remplir';
      rajout4.style.color="red"
      age.style.background="red";
      e.preventDefault()
   }else{
      rajout4.innerHTML=""
      age.style.background="green"
   }
   
 });
 bonde.addEventListener('click', function(e){
   if (!country.value) {
      rajout5.innerHTML='remplir';
      rajout5.style.color="red"
      country.style.background="red";
      e.preventDefault()
   }else{
      rajout5.innerHTML=""
      country.style.background="green"
   }
   
 });
   bonde.addEventListener('click', function(e){
   if (!age.value) {
      rajout4.innerHTML='remplir';
      rajout4.style.color="red"
      age.style.background="red";
      e.preventDefault()
   }else{
      rajout4.innerHTML=""
      age.style.background="green"
   }
   
 });
 bonde.addEventListener('click', function(e){
   if (!country.value) {
      rajout5.innerHTML='remplir';
      rajout5.style.color="red"
      country.style.background="red";
      e.preventDefault()
   }else{
      rajout5.innerHTML=""
      country.style.background="green"
   }
   
 });