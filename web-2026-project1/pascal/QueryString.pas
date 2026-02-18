PROGRAM GreetUser(INPUT, OUTPUT);
USES
  DOS;
VAR
  Q: STRING;
  P: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Q := GetEnv('QUERY_STRING');
  P := Pos('name=', Q);
  IF P > 0
  THEN
    BEGIN
      Delete(Q, 1, P + 4);
      WRITELN('Hello dear, ', Q, '!')
    END
  ELSE
    WRITELN('Hello Anonymous!')
END.