FROM python:3.8

WORKDIR /app
RUN python3 -m venv /opt/venv
RUN chmod a+x /opt/venv/bin/activate
RUN /opt/venv/bin/activate
RUN pip3 install -U pip
RUN pip3 install rasa
RUN pip3 install rasa[full]