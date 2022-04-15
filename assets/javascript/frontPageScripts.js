      // element - array of css selector
      // classes - array of classes to toggle
      function toggleClass(element, classes, force) {
        element.forEach(el => {

          let domElement = document.querySelector(el)
          // console.log(element,classes)
          if (force !== null) {
            classes.forEach(show => domElement.classList.toggle(show, force))
          } else {
            classes.forEach(show => domElement.classList.toggle(show))
          }

        })

      }