PROGRAM PaulRevere(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryString: STRING;
  SignalPos: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;

  QueryString := GetEnv('QUERY_STRING');
  SignalPos := Pos('lanterns=', QueryString);

  IF SignalPos > 0
  THEN
    BEGIN
      Delete(QueryString, 1, SignalPos + 8);
      IF QueryString = '1' THEN
        WRITELN('The British are coming by land')
      ELSE IF QueryString = '2' THEN
        WRITELN('The British are coming by sea')
      ELSE
        WRITELN('Unknown signal: ', QueryString)
    END
  ELSE
    WRITELN('Error: Parameter "lanterns" not found')
END.