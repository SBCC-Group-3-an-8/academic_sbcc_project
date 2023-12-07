import React, { useState } from 'react';

function App() {
 const [formData, setFormData] = useState({
    Year: '',
    Division: '',
    teacherName: '',
    q1: '',
    q2: '',
    q3: '',
    q4: '',
    q5: '',
    q6: '',
    q7: '',
    q8: '',
    q9: '',
    q10: '',
    suggestions: '',
 });

 const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
 };

 const handleSubmit = (e) => {
    e.preventDefault();
    console.log(formData);
    // Send form data to your backend here
 };

 return (
    <div className="App">
      <h1>Student Feedback Form</h1>
      <form onSubmit={handleSubmit}>
        <label for="Year">Select Year:</label>
        <select
          id="Year"
          name="Year"
          value={formData.Year}
          onChange={handleChange}
          required
        >
          <option value="">Select an option</option>
          <option value="first">First Year</option>
          <option value="second">Second Year</option>
          <option value="third">Third Year</option>
          <option value="fourth">Fourth Year</option>
        </select>

        <label for="Division">Select Division:</label>
        <select
          id="Division"
          name="Division"
          value={formData.Division}
          onChange={handleChange}
          required>
          <option value="">Select an option</option>
          <option value="A">Division A</option>
          <option value="B">Division B</option>
        </select>
        
        <label for="Teacher">Select Teacher:</label>
        <select id="teacherName" name="teacherName" value={formData.teacherName}
        onChange={handleChange} 
        required>
        <option value="">Select an option</option> 
        <option value="Dr.M.A.Jawale">Dr. M.A.Jawale</option> 
        <option value="Dr.M.B.Gawali">Dr.M.B.Gawali</option> 
        <option value="Mr.A.A.Barbind">Mr. A. A. Barbind</option>
        <option value="Mr.R.N.Kankrale">Mr.R.N.Kankrale</option> 
        <option value="Dr.D.S.Jadhav">Dr. D.S.Jadhav</option> 
        <option value="Mr.R.R.Nikam">Mr.R.R.Nikam</option> 
        <option value="Dr.R.D.Chintamani">Dr.R.D.Chintamani</option> 
        <option value="Dr.Y.S.Deshmukh">Dr.Y.S.Deshmukh</option> 
        <option value="Mrs.K.D.Patil">Mrs.K.D.Patil</option> 
        <option value="Dr.N.S.Patankar">Dr.N.S.Patankar</option> 
        <option value="Mr.C.D.Bawankar">Mr.C.D.Bawankar</option> 
        <option value="Mr.P.R.Mutkule">Mr.P.R.Mutkule</option> 
        <option value="Mrs.M.S.Kurhe">Mrs.M.S.Kurhe</option> 
        <option value="Mr.N.L.Shelake">Mr.N.L.Shelake</option> 
        <option value="Mr.S.Muthuraj">Mr.S.Muthuraj</option> 
        <option value="Mr.U.B.Sangule">Mr. U.B.Sangule</option> 
        </select>
        
        <label htmlFor="q1">
          Q1. Has the teacher shared with you the Course plan, CIA (Continuous Internal Assessment) activity details, Course objectives and outcomes of his/her subject?*
        </label>
        <select
          id="q1"
          name="q1"
          value={formData.q1}
          onChange={handleChange}
          required
        >
          <option value="">Select an option</option>
          <option value="Shared in the first week of teaching">Shared in the first week of teaching</option>
          <option value="Shared before first feedback">Shared before first feedback</option>
          <option value="Shared after first feedback">Shared after first feedback</option>
          <option value="Not shared">Not shared</option>    
        </select>
        

        <label htmlFor="q2">
          Q2. The teacher has covered the extent of syllabus in the class as per the plan.
        </label>
        <select
          id="q2"
          name="q2"
          value={formData.q2}
          onChange={handleChange}
          required
        >
          <option value="">Select an option</option>
          <option value="Strongly Agree">Strongly Agree</option>
          <option value="Agree">Agree</option>
          <option value="Partially Agree">Partially Agree</option>
          <option value="Disagree">Disagree</option>
          
        </select>
        <label htmlFor="q3">
          Q3. Does the teacher conduct the class as per time table and engage all lectures regularly?
        </label>
        <select
          id="q3"
          name="q3"
          value={formData.q3}
          onChange={handleChange}
          required
        >
          <option value="">Select an option</option>
          <option value="Always">Always</option>
          <option value="Mostly">Mostly</option>
          <option value="Sometimes">Sometimes</option>
          <option value="Not at all">Not at all</option>
        </select>

        <label htmlFor="q4">
          Q4. The teacher uses the proper aids and Information & Communication Technology (ICT) tools in the class to facilitate the teaching in an innovative way?
        </label>
        <select
          id="q4"
          name="q4"
          value={formData.q4}
          onChange={handleChange}
          required
        >
          <option value="">Select an option</option>
          <option value="Strongly Agree">Strongly Agree</option>
          <option value="Agree">Agree</option>
          <option value="Partially Agree">Partially Agree</option>
          <option value="Disagree">Disagree</option>
        </select>

        <label htmlFor="q5">
          Q5. Has the teacher shared with you the rubrics for the CIA activity? 
        </label>
        <select
          id="q5"
          name="q5"
          value={formData.q5}
          onChange={handleChange}
          required
        >
          <option value="">Select an option</option>
          <option value="Shared in the first week of teaching">Shared in the first week of teaching</option>
          <option value="Shared before first feedback">Shared before first feedback</option>
          <option value="Shared after first feedback">Shared after first feedback</option>
          <option value="Not shared">Not shared</option> 
        </select>

        <label htmlFor="q6">
          Q6. The teacher conducts the CIA as per the details shared and does assessment as per the rubrics.* 
        </label>
        <select
          id="q6"
          name="q6"
          value={formData.q6}
          onChange={handleChange}
          required
        >
          <option value="">Select an option</option>
          <option value="Strongly Agree">Strongly Agree</option>
          <option value="Agree">Agree</option>
          <option value="Partially Agree">Partially Agree</option>
          <option value="Disagree">Disagree</option>
        </select>

        <label htmlFor="q7">
          Q7. Does the teacher interact with the students in the class? 
        </label>
        <select
          id="q7"
          name="q7"
          value={formData.q7}
          onChange={handleChange}
          required
        >
          <option value="">Select an option</option>
          <option value="Always">Always</option>
          <option value="Mostly">Mostly</option>
          <option value="Sometimes">Sometimes</option>
          <option value="Not at all">Not at all</option>
        </select>

        <label htmlFor="q8">
          Q8. Is the teacher audible in the class? 
        </label>
        <select
          id="q8"
          name="q8"
          value={formData.q8}
          onChange={handleChange}
          required
        >
          <option value="">Select an option</option>
          <option value="Very Much">Ver Much</option>
          <option value="Fair">Fair</option>
          <option value="Poor">Poor</option>
          <option value="Not at all">Not at all</option>
        </select>

        <label htmlFor="q9">
          Q9. Does the teacher explains the concepts to you properly? 
        </label>
        <select
          id="q9"
          name="q9"
          value={formData.q9}
          onChange={handleChange}
          required
        >
          <option value="">Select an option</option>
          <option value="Always">Always</option>
          <option value="Mostly">Mostly</option>
          <option value="Sometimes">Sometimes</option>
          <option value="Not at all">Not at all</option>
        </select>
        
        <label htmlFor="q10">
          Q10.The teacher provides opportunities in the class for active learning like Project based learning, Real time examples, Quiz, Discussion etc? 
        </label>
        <select
          id="q10"
          name="q10"
          value={formData.q10}
          onChange={handleChange}
          required
        >
          <option value="">Select an option</option>
          <option value="Strongly Agree">Strongly Agree</option>
          <option value="Agree">Agree</option>
          <option value="Partially Agree">Partially Agree</option>
          <option value="Disagree">Disagree</option>
        </select>

        <label for="suggestions">Any other suggestions:</label>
        <textarea
          id="suggestions"
          name="suggestions"
          value={formData.suggestions}
          onChange={handleChange}
          rows="4"
        ></textarea>

        <button type="submit">Submit Feedback</button>
      </form>
    </div>
 );
}

export default App;