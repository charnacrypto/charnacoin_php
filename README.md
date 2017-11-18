# Charnacoin Library
The Charnacoin Library for PHP

## How It Works
The Charnacoin Library (aka Charnacoin_Payments.php) will try to connect to your Charnacoin RPC Daemon (charnacoin-wallet-rpc). See the next section for how to use it and for more information).
Charnacoin RPC Daemon has a json api that can communicate with the Charnacoin Library. The Charnacoin Library will automatically know your address and other things.

## Preview
![Preview](http://i.imgur.com/fyfRCOS.png)

## Configuration
### Requirements
 - PC + internet
 - Ubuntu or Debian
 - Charnacoin daemon
 - PHP server like XMPP; Apache or ngix
 
###

Step 1: Start the Charnacoin Daemon as Testnet
```bash
charnacoind --testnet --detach
```

Step 2: Start the Charnacoin Wallet RPC
```bash
charnacoin-wallet-rpc --testnet --rpc-bind-port 28080 --disable-rpc-login --wallet-file /path/walletfile
```

Step 3: Edit example.php with your ip (127.0.0.1 for localhost) and port of Charnacoin Wallet RPC (in the example it's 127.0.1 and 28080 port)


Step 4: Open your browser with your ip of XMPP, apache or nginx server and execute example.php. If the library works, it will print your address
