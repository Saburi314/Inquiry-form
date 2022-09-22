FROM mysql:8.0

ENV MYSQL_DATABASE=inquiry_db \
  MYSQL_USER=saburi \
  MYSQL_PASSWORD=saburi_pass \
  MYSQL_ROOT_PASSWORD=root \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 644 /etc/mysql/conf.d/my.cnf