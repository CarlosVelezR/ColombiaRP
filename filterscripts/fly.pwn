#include <a_samp>
#include <fly>

public OnFilterScriptInit()
{
	print("=========================================\n");
	print("Fly include demo FS by Norck");
	print(" ");
	print("=========================================\n");
	return 1;
}
public OnPlayerConnect(playerid)
{
	InitFly(playerid);
	return 1;
}
public OnPlayerCommandText(playerid, cmdtext[])
{
	if(!strcmp(cmdtext,"/fly",true))
	{
	    StartFly(playerid);
	    return 1;
	}
	if(!strcmp(cmdtext,"/stopfly",true))
	{
	    StopFly(playerid);
	    return 1;
	}
	return 0;
}
