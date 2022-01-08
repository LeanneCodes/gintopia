import os
import json
from flask import Flask, render_template, request, flash
if os.path.exists("env.py"):
    import env


app = Flask(__name__)
app.secret_key = os.environ.get("SECRET_KEY")


@app.route("/")
def index():
    return render_template("index.html")


@app.route("/allaboutgin")
def allaboutgin():
    data = []
    with open("data/gin.json", "r") as json_data:
        data = json.load(json_data)
    return render_template("allaboutgin.html", gin=data)


@app.route("/booking_type")
def booking_type():
    return render_template("booking_type.html")


@app.route("/booking_private")
def booking_private():
    return render_template("booking_private.html")


@app.route("/booking_open")
def booking_open():
    return render_template("booking_open.html")


@app.route("/booking_confirmed")
def booking_confirmed():
    return render_template("booking_confirmed.html")


@app.route("/contactus", methods=["GET", "POST"])
def contactus():
    if request.method == "POST":
        flash("Thanks {}, we have received your message!".format(
            request.form.get("name")))
    return render_template("contactus.html")    


@app.route("/signup")
def signup():
    return render_template("signup.html")


if __name__ == "__main__":
    app.run(
        host=os.environ.get("IP", "0.0.0.0"),
        port=int(os.environ.get("PORT", "5000")),
        debug=True)
