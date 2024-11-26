import os
from flask import Flask
from dotenv import load_dotenv
import pymysql  # or mysql.connector if using mysql-connector-python
from movie_library.routes import pages

load_dotenv()


def create_app():
    app = Flask(__name__)
    
    # Load configuration from environment variables
    app.config["MYSQL_HOST"] = os.environ.get("MYSQL_HOST", "localhost")
    app.config["MYSQL_USER"] = os.environ.get("MYSQL_USER", "root")
    app.config["MYSQL_PASSWORD"] = os.environ.get("MYSQL_PASSWORD", "")
    app.config["MYSQL_DB"] = os.environ.get("MYSQL_DB", "movie_library")
    app.config["SECRET_KEY"] = os.environ.get(
        "SECRET_KEY", "pf9Wkove4IKEAXvy-cQkeDPhv9Cb3Ag-wyJILbq_dFw"
    )

    # Set up the MySQL connection
    app.db = pymysql.connect(
        host=app.config["MYSQL_HOST"],
        user=app.config["MYSQL_USER"],
        password=app.config["MYSQL_PASSWORD"],
        database=app.config["MYSQL_DB"]
    )

    # Register routes blueprint
    app.register_blueprint(pages)
    
    return app
