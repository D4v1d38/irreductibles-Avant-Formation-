/*element = le bloc ou l'element a afficher ou cacher, 
mode= on ou off pour forcer l'affichage ou la disparition */
function Affichage (element,mode){
	let identite = document.getElementById(element);
	if(mode === 'on') identite.style.display = 'block';
	else if (mode === 'off') identite.style.display= 'none';
	else if (identite.style.display === 'none') identite.style.display= 'block';
	else identite.style.display = 'none';
}

function Elementsapercu(){
	let elementApercuTitre = document.getElementById('titrearticle').value; 
	document.getElementById('apercu_article_titre').innerHTML = elementApercuTitre;
	document.getElementById('apercu_home_titre').innerHTML = elementApercuTitre;

	let elementApercuIntro = document.getElementById('introarticle').value;
	document.getElementById('apercu_article_intro').innerHTML = elementApercuIntro;

	let elementApercuArticle = document.getElementById('summernote').value;
	elementApercuArticle = elementApercuArticle.replace(/<p>/g,' ');
	elementApercuArticle = elementApercuArticle.replace(/<\/p>/g,'<br />');
	document.getElementById('apercu_article_article').innerHTML = elementApercuArticle;
	document.getElementById('apercu_home_contenu').innerHTML = elementApercuArticle;

	let elementApercuPublication = document.getElementById('date_creation').value;
	document.getElementById('apercu_article_publication').innerHTML = "publié le : " + elementApercuPublication;
	document.getElementById('apercu_home_publicaton').innerHTML = "publié le : " + elementApercuPublication;

	let elementApercuAuteur = document.getElementById('auteur').value;
	document.getElementById('apercu_article_auteur').innerHTML = "Par :" + elementApercuAuteur;

	let elementApercuImage = document.getElementById('image_article_home').value;
	document.getElementById('apercu_home_image').src = "images/design/cages_70x70.png";
	alert(elementApercuImage);
}



