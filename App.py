from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def index():
    # Sample data matching jewelry items
    products = [
        {'name': 'Diamond Necklace', 'price': '₹45,000', 'img': 'necklace.jpg'},
        {'name': 'Gold Ring', 'price': '₹12,000', 'img': 'ring.jpg'}
    ]
    return render_template('layout.html', products=products)

if __name__ == '__main__':
    app.run(debug=True)
