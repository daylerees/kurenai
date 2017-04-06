pipeline {
  agent any
  stages {
    stage('Sleepy time!') {
      steps {
        parallel(
          "Sleepy time!": {
            sleep 10
            
          },
          "": {
            echo 'Yawn!'
            
          }
        )
      }
    }
    stage('Output!') {
      steps {
        echo 'Hello world!'
      }
    }
  }
}