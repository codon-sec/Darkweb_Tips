# Notice
TorブラウザはPC全体の通信をTor経由させるわけではない、以下の選択肢を取る
- Tor内蔵ルータを用意する(ラズパイによる自作可)
- Tor専用OSを使用する

# bypass tor
```
torsocks php -r "echo file_get_contents('https://ipinfo.io/json');"
```
