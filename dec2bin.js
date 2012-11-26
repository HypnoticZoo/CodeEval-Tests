function convert(num)
{
    var dnum=parseInt(num);
    var dno=new Number(dnum);
	if(!isNaN(dno))
	{
        return dno.toString(2);
	}
}


function codeEvalExecute(line) 
{
    return convert(line);
}
