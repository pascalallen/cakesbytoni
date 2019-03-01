import styled from 'styled-components';

export const ImageText = styled.span`
  display: none;
  justify-content: center;
  align-items: center;
  font-size: 15px;
  font-weight: 700;
  font-style: italic;
  color: white;
  margin: 0;
  position: relative;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
`;

export const StyledImage = styled.div`
  position: relative;
  float: left;
  width:  25%;
  height: 280px;
  background-position: 50% 50%;
  background-repeat:   no-repeat;
  background-size:     cover;
  background-image: url(${props => props.src};);
  filter: grayscale(100%);

  &:hover {
    filter: none;

    span {
      display: flex;
    }
  }
`;

export const StyledDiv = styled.div`
  display: flex;
  justify-content: center;
  align-items: center;
`;
