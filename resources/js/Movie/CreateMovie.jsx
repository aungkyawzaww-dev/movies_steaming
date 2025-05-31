import axios from 'axios';
import React, { useState } from 'react'
import {createRoot} from 'react-dom/client'
const CreateMovie = () => {

    const [data,setData] = useState({
        name: "",
        release_date: "",
        rating:"",
        image_url:"",
        description:""
    });

    const changeTMDBIdHandler = (showid) => {
        const apikey = "d8e5a89ef4ad47d470effb335b141b87";
        const api = `https://api.themoviedb.org/3/movie/${showid}?api_key=${apikey}`

        axios.get(api).then(({data}) => setData({
            ...data,
            name: data.title,
            release_date: data.release_date,
            rating: data.vote_average,
            image_url: `https://image.tmdb.org/t/p/w500${data.poster_path}`,
            description: data.overview

        }));
    }

  return (
    <div className='container-fluid'>
        <div className="row">
            <div className="col-8">

                <div className="form-group">
                    <label htmlFor="tmdbid">Enter TMDB ID</label>
                    <input type="text" name='tmdbid' id='tmdbid' className='form-control' onChange={ (e)=> changeTMDBIdHandler(e.target.value)} />
                </div>

                <div className="form-group">
                    <label htmlFor="name">Enter Name</label>
                    <input type="text" name='name' id='name' className='form-control' onChange={changeTMDBIdHandler} value={data.name} />
                </div>

                <div className="form-group">
                    <label htmlFor="release_date">Release Date</label>
                    <input type="text" name='release_date' id='release_date' className='form-control' onChange={changeTMDBIdHandler} value={data.release_date} />
                </div>

                <div className="form-group">
                    <label htmlFor="rating">Enter Rating</label>
                    <input type="text" name='rating' id='rating' className='form-control' onChange={changeTMDBIdHandler} value={data.rating}/>
                </div>

                <div className="form-group">
                    <label htmlFor="image_url">Enter Image URL</label>
                    <input type="text" name='image_url' id='image_url' className='form-control mb-2 ' onChange={changeTMDBIdHandler} value={data.image_url} />
                    <img src={data.image_url} style={{ width: '130px' }} className='object-fit-cover' alt="" />
                </div>

                <div className="form-group">
                    <label htmlFor="description">Enter Description</label>
                    <textarea name="description" id="description" className="form-control" style={{height:"220px"}} onChange={changeTMDBIdHandler} value={data.description}></textarea>
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

