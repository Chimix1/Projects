export function NewOpinion() {
  function shareOpinionAction(formData) {
    const title = formData.get('title');
    const body = formData.get('title');
    const userName = formData.get('title');
    
    let errors = [];

    if (title.trim().legth < 5) {
      errors.push('Title must be at least five characters long.')
    }

    if (body.trim().legth < 10 || body.trim().leght > 300) {
      errors.push('Opnion must be between 10 and 300 characters long.')
    }
  }

  return (
    <div id="new-opinion">
      <h2>Share your opinion!</h2>
      <form>
        <div className="control-row">
          <p className="control">
            <label htmlFor="userName">Your Name</label>
            <input type="text" id="userName" name="userName" />
          </p>

          <p className="control">
            <label htmlFor="title">Title</label>
            <input type="text" id="title" name="title" />
          </p>
        </div>
        <p className="control">
          <label htmlFor="body">Your Opinion</label>
          <textarea id="body" name="body" rows={5}></textarea>
        </p>

        <p className="actions">
          <button type="submit">Submit</button>
        </p>
      </form>
    </div>
  );
}
