『概要』  
PHP 8.0.23  
Laravel 8.83.23  
Composer 2.4.1  
MySQL 8.0.30  

backend　ディレクトリにlaravelのソースが搭載されています。  
infra ディレクトリにmysql、nginx、php などの設定ファイルが搭載されています。　　

環境構築後、  
[http://127.0.0.1:8000/inquiry](http://127.0.0.1:8000/inquiry)  にアクセスすることで、問い合わせフォームが表示されます。  
[http://127.0.0.1:8080/](http://127.0.0.1:8080/)   にアクセスすることで、データが挿入されているDBを確認できます。  

※現在、デザインの修正やリファクタリングを行っています。  
不要なコメントが残っていたり、コードが読みづらくなっています。  
ご了承ください。  

『修正すべき点』
現時点で、いくつかの修正点が見つかっています。  
・画像をアップした時点で画像が表示されるようにできていない  
・入力内容修正を押した後に、画像データが保持できていない
※その他、フォームが正しく機能しているかテスト設計書などを作成し、テストする予定です。（+α課題）

『ローカル環境構築方法』

1.projectをpullしたいディレクトリ配下へ移動

2.『git clone https://github.com/Saburi314/Inquiry-form.git 』コマンドを実行する

3.『cd Inquiry-form』でdocker-compose.yml　ファイルがあるディレクトリへ移動

3.『docker-compose build』をコマンドで実行し、イメージを作成する

4.『docker-compose up -d』をコマンドで実行し、Dockerを起動する

5.『docker-compose exec app bash』でコンテナ内へ入る

6.コンテナ内にて、『composer install』を実行し、vendorディレクトリを作成する

7.『cp .env.example .env』を実行し、.envファイルを作成

8.『chmod 777 -R storage』を実行し、権限を付与する

8.『php artisan key:generate』を実行し鍵を生成する

以上の手順を実行すると、http://127.0.0.1:8000 にてLaravelのホーム画面が表示されます。

上手くいかなかった場合は、下記のURLをご参考にしてください。
https://laraweb.net/environment/9103/

