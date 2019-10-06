import React from "react";
import "./Tweet.css";

class Tweet extends React.Component {

  constructor(props) {
    super(props);
    this.state = {
      votes: 0
    };

    this.handleClick = this.handleClick.bind(this);
  }

  handleClick(e) {
    this.setState({
      votes: this.state.votes + 1
    });
  }

  render() {
    return (
      <div className="tweet">
        {this.props.tweet.text}
        
          <button onClick={this.handleClick} className="btn btn-primary">
            Votar{" "}
          </button>
          <span> Votos: <span id="spVoteValue">{this.state.votes}</span></span>
        
      </div>
    );  
  }
}

export default Tweet;