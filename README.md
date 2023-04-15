# LaravelでヘッドレスCMS

## 操作手順  
Docekrをインストール・Dockerを起動させる  
イメージを元にコンテナを作成  
`$ docker-compose up -d`  
  
コンテナが立ち上がっているか確認  
`$ docker-compose ps`  
  
上記でDockerが立ち上がる  
  
Laravelに対してマイグレーションやインストールする場合appコンテナに入る  
`$ docker-compose exec app bash`  
  
Dockerを停止する  
`$ docker compose down`  

## サーバー起動とローカル環境の起動
1. Dockerの起動
`$ docker-compose up`  

2. Laravelのディレクトリに移動  
`$ docker-compose exec app bash`  

3. サーバ内のディレクトリ移動  
`$ cd headless-cms`  

4. ローカル環境起動（vite）
`$ npm run dev`  

localhost:80が起動しない場合は、 
`$ docker-compose up -d --build` でイメージを再構築

1. 起動確認
> dev
> vite
>
>  VITE v4.2.1  ready in 1001 ms
>
>  ➜  Local:   http://localhost:5173/
>  ➜  Network: http://192.168.48.3:5173/
>  ➜  press h to show help
>
>  LARAVEL v9.52.4  plugin v0.7.4
>
>  ➜  APP_URL: http://localhost:81
上記が表示されたら、起動完了になります。

本番用にビルドする場合は、`npm run build`になります。
  
WEB：http://localhost:81/  
phpmyadmin：http://localhost:8080/  
  
## 構成  
基本のLAMP環境になります。  
Apache  
php 8.1  
mysql 8.0.30  
phpmyadmin 5.2.0  
Laravel 9  

## Laravelの構成  
初期インストールしているもの  
barryvdh/laravel-debugbar：https://github.com/barryvdh/laravel-debugbar  
doctrine/dbal：https://github.com/doctrine/dbal  
briannesbitt/Carbon：https://github.com/briannesbitt/Carbon  
Laravel Lang：https://laravel-lang.com/installation/  
Laravel ui

### DBの設定変更  
docker-compose.ymlのファイルと.envファイルのDBの接続先の情報は、
同じになるように.envファイルのファイル名を変更。


### npmでのインストールなどがうまくいかない場合
`$ apt update`
`$ apt install nodejs npm`
でパッケージを更新