PROGRAM HttpResponse(INPUT, OUTPUT);
USES
  DOS;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('Request method is ', GetEnv('REQUEST_METHOD'));
  WRITELN('Hello, ', GetEnv('QUERY_STRING'));
  WRITELN('Content length: ', GetEnv('CONTENT_LENGTH'));
  WRITELN('You are using: ', GetEnv('HTTP_USER_AGENT'));
  WRITELN('HTTP host: ', GetEnv('HTTP_HOST'));
END.