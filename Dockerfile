FROM scaleinfinite/php-nginx


COPY /INGC_CRM /var/www/html

# Configure nginx
COPY config/nginx.conf /etc/nginx/nginx.conf

# Configure supervisord
COPY config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

USER root
RUN chmod 766 test.db
RUN apk add --no-cache \
  python3 \
  py3-pip


RUN pip install -r requirements.txt

USER nobody

EXPOSE 80



#ENTRYPOINT ["python3"]
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
#CMD ["sh", "start.sh"]
