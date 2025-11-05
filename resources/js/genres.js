  // Auto-submit whenever any checkbox toggles
  document.getElementById('genre-form')
    .addEventListener('change', function () {
      // Optional: reset pagination when changing filters
      const url = new URL(window.location.href);
      url.searchParams.delete('page');
      // Submit the form (lets the browser rebuild ?genre[]=... from inputs)
      this.submit();
    });