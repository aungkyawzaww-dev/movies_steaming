import React from 'react'
import {createRoot} from 'react-dom/client'
const CreateMovie = () => {
  return (
    <div className='container-fluid'>
        <div className="row">
            <div className="col-8">

                <div className="form-group">
                    <label htmlFor="tmdbid">Enter TMDB ID</label>
                    <input type="text" name='tmdbid' id='tmdbid' className='form-control from-control-sm' />
                </div>

                <div className="form-group">
                    <label htmlFor="name">Enter Name</label>
                    <input type="text" name='namd' id='name' className='form-control from-control-sm' />
                </div>

                <div className="form-group">
                    <label htmlFor="rating">Enter Rating</label>
                    <input type="text" name='rating' id='rating' className='form-control from-control-sm' />
                </div>

                <div className="form-group">
                    <label htmlFor="imageurl">Enter Image URL</label>
                    <input type="text" name='imageurl' id='imageurl' className='form-control from-control-sm' />
                    <img src="data:image/jpeg;base64,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" style={{ width: '130px' }} alt="" />
                </div>

                <div className="form-group">
                    <label htmlFor="description">Enter Description</label>
                    <textarea name="description" id="description" className="form-control form-control-sm" style={{height:"220px"}} ></textarea>
                </div>

            </div>

            <div className="col-4">
                <div className="form-group">
                    <label>Choose Category</label>
                    
                    <select multiple={true} id='movie_category'>

                        {blade_movie_category.map(d=>(
                            <option key={d.id} value={d.id}>{d.name}</option>
                        ))}

                    </select>
                </div>

                <button className='btn btn-primary'>Create Movie</button>

            </div>
        </div>
     
    </div>
  )
}

createRoot(document.getElementById('root')).render(<CreateMovie/>);

