function test()
{
	var verif1==0;
	var verif2==0;
	var verif3==0;
	var verif4==0;
	var verif5==0;
	if(f1.id.value.length==0)
	{
		alert("id est obligatoire");
	}
	else
	{
		verif1++;
	}
	if(f1.nom.value.length==0)
	{
		alert("le nom est oblogatoire");
	}
	else
	{
		verif2++;
	}
	if(f1.prenom.value.length==0)
	{
		alert("le prenom est oblogatoire");
	}
	else
	{
		verif3++;
	}
   if(f1.email.value.length==0)
	{
		alert("l'email est oblogatoire");
	}
	else
	{
		verif4++;
	}
if(f1.pays.value.length==0)
	{
		alert("le pays est oblogatoire");
	}
	else
	{
		verif5++;
	}
    if(verif1==1 && verif2==1 && verif3==1 && verif4==1 && verif5==1)
    {
    	alert("merci pour la participation");
    }

}