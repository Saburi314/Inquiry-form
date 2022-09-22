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

『今後の課題』  
追加課題としてフォームが正しく機能しているかテスト設計書を作成し、テストする予定です。

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

