PROGRAM QueryProcessor(INPUT, OUTPUT);
USES
  DOS;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  QueryStr: STRING;
  KeyPos: INTEGER;
  ResultStr: STRING;
  AmpersandPos: INTEGER;
BEGIN
  ResultStr := '';
  QueryStr := GetEnv('QUERY_STRING');
  KeyPos := Pos(Key + '=', QueryStr);
  
  IF KeyPos > 0
  THEN
    BEGIN
      KeyPos := KeyPos + Length(Key) + 1;
      AmpersandPos := Pos('&', Copy(QueryStr, KeyPos, Length(QueryStr)));
      IF AmpersandPos > 0
      THEN
        ResultStr := Copy(QueryStr, KeyPos, AmpersandPos - 1)
      ELSE
        ResultStr := Copy(QueryStr, KeyPos, Length(QueryStr));
    END;
  
  GetQueryStringParameter := ResultStr
END;

BEGIN {QueryProcessor}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {QueryProcessor}