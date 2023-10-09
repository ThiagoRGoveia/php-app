# PHP Form App

This is a simple PHP application that demonstrates form validation with object-oriented programming. This app uses the Bootstrap framework for styling and is containerized using Docker.

## Features

- Object-oriented approach for better maintainability
- Form validation
- Bootstrap integration for styling
- Containerized using Docker

## Requirements

- Docker
- Web browser for accessing the app

## Running the App

### With Docker

1. **Clone the repository**

   ```
   git clone https://github.com/ThiagoRGoveia/php-app.git
   cd php-app
   ```

2. **Build the Docker image**

   ```
   docker build -t php-app .
   ```

3. **Run the Docker container**

   ```
   docker run -p 8080:80 php-app
   ```

4. **Hot reload**

   ```
   docker run -p 8080:80 -v $(pwd)/src:/var/www/html php-app
   ```

5. **Access the app**

   Open your web browser and navigate to `http://localhost:8080`.

### Without Docker

If you'd like to run this without Docker, you'll need to set up a PHP and Apache environment manually.

## Directory Structure

- `src/components`:
  - `Input.php`: Abstract class for all types of inputs.
  - `TextInput.php`: Class for text input.
  - `Form.php`: Form class to hold multiple inputs and perform validation.
- `src/controllers`:
  - `FormController.php`: Controller for the form.
- `src/index.php`: The main PHP file that renders the form.
- `Dockerfile`: The Docker configuration file.
- `README.md`: This file.
- `styles.css`: The stylesheet for the application.
