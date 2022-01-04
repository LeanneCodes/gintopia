import os
import json
from flask import Flask, render_template


app = Flask(__name__)


@app.route("/")
def index():
    return render_template("index.html")


@app.route("/allaboutgin")
def allaboutgin():
    data = []
    with open("data/gin.json", "r") as json_data:
        data = json.load(json_data)
    return render_template("allaboutgin.html", gin=data)


@app.route("/bookaclass")
def bookaclass():
    return render_template("bookaclass.html")


@app.route("/contactus")
def contactus():
    return render_template("contactus.html")


@app.route("/signup")
def signup():
    return render_template("signup.html")


if __name__ == "__main__":
    app.run(
        host=os.environ.get("IP", "0.0.0.0"),
        port=int(os.environ.get("PORT", "5000")),
        debug=True)
