import axios from 'axios';
import React, { use, useState } from 'react'
import {createRoot} from 'react-dom/client'
import { ToastContainer, toast } from 'react-toastify';
import ReactSelect from 'react-select'
import BtnLoader from '../Components/BtnLoader';

// blade_movie_category   blade_movie


const categories = blade_movie_category.map( category => {
    
    return {
        value: category.id,
        label: category.name
    }
});

// console.log(selectCategoryIDs);
const selectCategoryIDs = [];
const selectCategory = blade_movie.category_fun.map( category => {
    selectCategoryIDs.push(category.id);
    return {
        value: category.id,
        label: category.name
    }
});


const EditMovie = () => {

    const [loader,setLoader] = useState(false);
    const [directLink,setDirectLink] = useState('');

    const [data,setData] = useState({
        embed_link: blade_movie.embed_link,
        name: blade_movie.name,
        release_date: blade_movie.release_date,
        rating: blade_movie.rating,
        image_url: blade_movie.image,
        description: blade_movie.description,
        category:selectCategoryIDs
    });

    const changeTMDBIdHandler = (showid) => {
        const apikey = "d8e5a89ef4ad47d470effb335b141b87";
        const api = `https://api.themoviedb.org/3/movie/${showid}?api_key=${apikey}`;

        axios.get(api).then((d) => setData({
            ...data,
            name: d.data.title,
            release_date: d.data.release_date,
            rating: d.data.vote_average,
            image_url: `https://image.tmdb.org/t/p/w500${d.data.poster_path}`,
            description: d.data.overview,

        }));

    }



    const uploadMovie = ()=>{

        if(directLink == ""){
            return alert("Please enter direct link");
        }

        const api = `https://streamhgapi.com/api/upload/url?key=28105e5eeik1ijid6j2gs&url=${directLink}`;

        axios.get(api).then((res) => {

            const file_code = res.data.result.filecode;
            // console.log(file_code);
            setData({
                ...data,
                embed_link : file_code
            });
            // console.log(file_code);

        });

    }

    // { photo ? (<Image ="rounded-3xl" src={photo}height={30}  width={30} alt="Profile image" />) : (<p>No image</p>)}

    const updateMovie = () => {
        setLoader(true);
        axios.post("/update-movie/"+blade_movie.id,data).then((d) => {
            if(d.data == "success") {
                toast.success("Movie Updated");
            }
            setTimeout(()=>{
                setLoader(false);
            },1000)
        })
        .catch((e)=>{
            setLoader(false);
            // console.log(e);
            if(e.status==422){
                const errDatas = e.response.data;
                // console.log(typeof errDatas);
                for (const key in errDatas) {
                    // console.log(errDatas[key]);
                    errDatas[key].map((errData) => toast.error(errData));
                }
            }

        })
    }

    const changeCategory = (categoryData) =>{

        const categoryIds = categoryData.map((catId) => catId.value);

        setData({
            ...data,category:categoryIds
        });
    }



  return (
    <div className='container-fluid'>
        <div className="row">
            <div className="col-8">

                <div className="form-group">
                    <label htmlFor="tmdbid">Enter TMDB ID</label>
                    <input type="text" name='tmdbid' id='tmdbid' className='form-control' onChange={ (e)=> changeTMDBIdHandler(e.target.value)} placeholder='000000' />
                </div>

                <div className="form-group">
                    <label htmlFor="name">Enter Name</label>
                    <input type="text" name='name' id='name' className='form-control' onChange={(e) => setData({...data,name:e.target.value})} value={data.name} />
                </div>


                <div className="form-group">
                    <label htmlFor="image_url">Enter Image URL</label>
                    <input type="text" name='image_url' id='image_url' className='form-control mb-2 ' onChange={(e)=> setData({...data,image_url:e.target.value})} value={data.image_url} />
                    {data.image_url ? <img src={data.image_url} style={{ width: '130px' }} alt="" /> : (<p>No Image</p>)}

                </div>

                <div className="form-group">
                    <label htmlFor="description">Enter Description</label>
                    <textarea name="description" id="description" className="form-control" style={{height:"220px"}} onChange={(e) => setData({...data,description:e.target.value})} value={data.description}></textarea>
                </div>

            </div>

            <div className="col-4">

                <div className="form-group">
                    <label htmlFor="">Enter move direct source</label>
                    <input type="text" onChange={e => setDirectLink(e.target.value)} className='form-control' placeholder="https://" />

                    {
                        data.embed_link != "" && <div className='mt-2 text-sm opacity-3'>{data.embed_link}</div>
                    }

                   <button onClick={uploadMovie} className='btn btn-dark mt-3'>Upload</button>
                </div>

                <div className="form-group">
                    <label htmlFor="release_date">Release Date</label>
                    <input type="text" name='release_date' id='release_date' className='form-control' onChange={(e) => setData({...data,release_date:e.target.value})} value={data.release_date} />
                </div>

                <div className="form-group">
                    <label htmlFor="rating">Enter Rating</label>
                    <input type="text" name='rating' id='rating' className='form-control' onChange={(e) => setData({...data,rating:e.target.value})} value={data.rating}/>
                </div>

                <div className="form-group">
                    <label>Choose Category</label>
                    
                    <ReactSelect
                        isMulti= {true}
                        options={categories}
                        onChange = {(category) => changeCategory(category)}
                        defaultValue = {selectCategory}
                    />
                </div>

                <button className='btn btn-primary d-flex justify-content-between align-items-center mb-2' disabled={loader} onClick={updateMovie}>
                    {loader && <BtnLoader/>}
                    Update Movie
                </button>

            </div>
        </div>

        <ToastContainer />  
     
    </div>
  )
}

createRoot(document.getElementById('root')).render(<EditMovie/>);

