# PCOD Prediction Using K-Nearest Neighbors (KNN)

This project is a web-based application designed to predict the likelihood of Polycystic Ovarian Disease (PCOD) using a K-Nearest Neighbors (KNN) machine learning model. The system provides real-time insights using external data sources and offers recommendations for fitness and healthcare facilities.

## Project Overview

Polycystic Ovarian Disease (PCOD) is a common hormonal disorder that affects many women worldwide. Early prediction and intervention can significantly help in managing the condition. This project provides a simple, interactive, and accurate tool for users to assess their risk based on relevant health data.

## Features

- **PCOD Prediction Using KNN**: The backend processes user-inputted health data and provides predictions on PCOD likelihood.
- **Latest PCOS Data Retrieval**: The system fetches the latest research articles and medical news related to PCOS, ensuring users have up-to-date information.
- **Google Maps API Integration**: Users can search for nearby fitness centers and healthcare facilities to manage their health better.
- **User-Friendly Web Interface**: Built with PHP, HTML, CSS, and JavaScript, making it accessible to non-technical users.
- **Manually Collected Dataset**: The training dataset was gathered via Google Forms, ensuring relevance to real-world cases.
- **Secure and Private**: User data is handled securely without unnecessary storage or exposure.

## Repository Structure

- `.vscode/` – Configuration files for Visual Studio Code.
- `WebAPP/` – Contains the PHP-based web application.
- `code_base/` – Python scripts for data processing, model training, and predictions.
- `.gitignore` – Specifies files and directories to be ignored by Git.

## Getting Started

### Prerequisites

- Install **XAMPP/WAMP** for running PHP-based web applications.
- Install **Python** and the required dependencies.
  ```bash
  pip install -r code_base/requirements.txt
  ```
- Obtain a **Google Maps API key** (for fitness center search) and configure it in the appropriate frontend file.

### Installation Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/JebinAbraham/PCOD-Prediction-using-KNN.git
   cd PCOD-Prediction-using-KNN
   ```

2. **Set Up the Web Server**
   - Copy the contents of `WebAPP/` to your web server directory (`htdocs` for XAMPP).
   - Start Apache and MySQL in XAMPP.

3. **Run the Application**
   - Access the web interface at `http://localhost/` in your browser.

## Usage

1. **Enter Health Data**: Users provide medical and lifestyle-related inputs.
2. **Get Prediction**: The backend KNN model analyzes the data and returns a prediction.
3. **Access Latest PCOS Research**: Users can view real-time articles about PCOS.
4. **Find Fitness Centers**: Using Google Maps API, the system suggests nearby fitness centers and healthcare facilities.

## Dependencies

- **Frontend**: HTML, CSS, JavaScript, PHP
- **Backend**: Python, Flask (for API), NumPy, Pandas, Scikit-learn
- **APIs**: Google Maps API, Medical News API

## Contributing

Contributions are welcome! Feel free to fork the repository and submit a pull request.

## License

This project is licensed under the **MIT License**. See the `LICENSE` file for details.
