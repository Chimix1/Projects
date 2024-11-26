from flask import Flask, render_template
app = Flask(__name__)

class GalileanMoons: 
    def __init__(self, first, second, third, fourth):
        self.first = first
        self.second = second
        self.third = third
        self.fourth = fourth

@app.route("/data-structures/")
def render_data_structures():
    
    movies = [
        "Leaon the professional",
        "The Usual Suspects",
        "A Beautiful Mind"
    ]

    car = {
        "brand": "Tesla",
        "model": "Roadster",
        "year": "2020"
    }

    moons = GalileanMoons("Io", "Europa", "Ganymode", "Callisto")

    kwargs = {
        "movies": movies,
        "car": car,
        "moons": moons
    }

    return render_template("data_structures.html", **kwargs)
