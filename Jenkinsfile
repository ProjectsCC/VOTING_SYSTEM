pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                // Checkout source code from Git
                git 'https://github.com/ProjectsCC/VOTING_SYSTEM.git'
            }
        }
        stage('Build') {
            steps {
                // Build your PHP project
                sh 'composer install'
            }
        }
        stage('Dockerize') {
            steps {
                // Build Docker image
                sh 'docker build -t php:8.0 .'
            }
        }
        stage('Deploy') {
            steps {
                // Deploy Docker image
                sh 'docker run -d -p 8082:80 php:8.0'
            }
        }
    }
}
